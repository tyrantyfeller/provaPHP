# Prova PHP
## Tarefas

1. Implemente uma tela de recuperação de senha com envio de código de seguraça por email e CAPTCHA.
2. Implemente criptografia no cadastro da senha no banco de dados.
3. Implemente a possibilidade de troca de senha com as seguintes regras:
- Usuarios do grupo admin podem alterar senha de qualquer outro usuário
- Usuarios do grupo Infra podem alterar senha de qualquer outro usuário, exceto do grupo admin caso o usuario pertença apenas ao grupo Admin
- Os usuarios dos demais grupos não podem alterar a senha de outros usuarios exceto a propria senha.
4. Altere a tela de listagem de usuários seguindo as seguintes regras:
- Usuarios do grupo Admin e Infra podem ver todos os usuarios
- Usuarios do grupo Diretor podem ver apenas usuarios dos grupos Diretor e Funcionarios
- Usuarios do grupo Funcionarios podem ver apenas usuarios dos grupos Diretores e Funcionarios
5. Crie uma tela de histórico de alterações de senhas que possa ser acessada por uma barra de navegação, onde apenas os usuarios do grupo Admin e Infra podem ver essa tela

