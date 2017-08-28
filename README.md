# HQ-Ilegra
Prova de Front UI

#Passo 1
Baixar o repositório via git clone ou download

#Passo 2 
Realizar o upload o arquivo hq-ilegra.sql no servidor local de Banco de Dados

#Passo 3
Depois de realizado o upload, verificar se as informações das linhas option_name e option_value () estão condizentes com o caminho do seu servidor local

#Passo 4
Acessar o arquivo wp-config.php e ajustar as informaçoes de login e senha de acesso ao servidor local do banco de dados

#Passo 5
Acessar o arquivo gulpfile.js que se encontra no caminho (wp-content\themes\ilegra\app)

#Passo 6
Verificar se a variável ex: localPath: 'HQ-Ilegra'. Tens o mesmo da pasta do projeto que foi realizado o download ou git clone

#Passo 7
Acessar via terminal de comando a pasta 'wp-content\themes\ilegra\app' e aplicar o comando 'npm install'

#Passo 8 
Após o download de todas as dependencias solicitadas via npm, realizar o comando 'gulp' via terminal na pasta wp-content\themes\ilegra\app

#Passo 9 
Iniciara o processo de carregamento do projeto, lembrando que o servidor local de banco de dados e PHP deve estar rodando.

#Passo 10 
Acessar o painel administrativo via url http://localhost:3000/HQ-Ilegra/wp-login.php
utilizar o login e senha:
login: felipe-ilegra
senha: YZgIZRH8pZ1Dyp^ip%

#Passo 11
Acessar o item do menu Configurações -> Links Permanentes -> Nome do Post. E salvar essa alteração.

#Informações sobre o teste - Post Type
Dentro do Painel administrativo está sendo apresentado um Post Type Dc Comics, aonde é possível realizar o cadastro e apresentação deste post personalizado na sessão DC Comics da home-page do teste.

#Integração com API Marvel Comics  
Realizei a listagem das HQs da Marvel via Ajax sendo possível conferir no arquivo main.js que se encontra em wp-content\themes\ilegra\app\scripts e sendo apresentada no arquivo front-page.php

#Grid do Projeto
Implementei o FlexBoxGrid para alinhamento do container e itens internos
http://flexboxgrid.com/

#Normalize.css
Utilizei a biblioteca normalize.css para uma melhor renderização de elementos em browsers mais antigos.
https://necolas.github.io/normalize.css/

#Pré-processador de CSS
Para a questão de CSS do projeto realizei a configuração do Pré-processador STYLUS, ele apresenta um curva de usabilidade e alinhamento do código muito interessante, tornando o código CSS mais legivel e simples de implementar
http://stylus-lang.com/





