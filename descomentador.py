import re

def remove_comments(code):
    code = re.sub(r'/\*.*?\*/', '', code, flags=re.DOTALL)
    code = re.sub(r'<!--.*?-->', '', code, flags=re.DOTALL)
    return code

with open('./PCD/index.html', 'r+', encoding='utf-8') as file:
    codigo = file.read()
    file.seek(0)  

    codigo_sem_comentarios = remove_comments(codigo)
    file.write(codigo_sem_comentarios)
    file.truncate() 

