import re

# Define file paths
PROTO_FILE = 'StarRail.proto'
CMD_ID_FILE = f'cmd_id.php'

CMD_PATTERN = re.compile(r'Cmd\w*(CsReq|ScRsp|Notify)\s*=\s*(\d+)')

def transform_to_php_constant_name(const_name):
    name = re.sub(r'([a-z0-9])([A-Z])', r'\1_\2', const_name[3:])
    return f"CMD_{name.upper()}"

with open(PROTO_FILE, 'r') as f:
    lines = f.readlines()

constants = []

for line in lines:
    match = CMD_PATTERN.search(line)
    if match:
        const_name = match.group(0).split('=')[0].strip()
        const_value = int(match.group(2))
        
        php_const_name = transform_to_php_constant_name(const_name)
        
        constants.append((php_const_name, const_value))

constants.sort(key=lambda x: x[1])

with open(CMD_ID_FILE, 'w') as php_file:
    php_file.write("<?php\n")
    php_file.write("// Auto-generated cmd_id file\n\n")
    php_file.write("class cmd_id {\n")
    
    for php_const_name, const_value in constants:
        php_file.write(f"    const {php_const_name} = {const_value};\n")
    
    php_file.write("}\n")

print(f"[SUCCESS] Generated cmd_id.php")
