# Projeto PHP para Consumir API ViaCEP pelo Terminal

Este é um projeto simples em PHP que demonstra como consumir a API do ViaCEP para consultar informações de CEP através do terminal.

## Descrição

O projeto consiste em um script PHP que utiliza cURL para fazer uma requisição à API do ViaCEP, passando um número de CEP como parâmetro. A resposta da API é então exibida no terminal.

## Pré-requisitos

Antes de começar, certifique-se de ter instalado:

- PHP (versão 7.x ou superior)
- Composer (para instalação de dependências, se necessário)

## Instalação

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
   ````
   
   Instale as dependências (se necessário):

2. **Instale as dependências (se necessário):**

Se houver dependências no projeto que precisem ser instaladas via Composer, execute:

```bash
Copiar código
composer install
````
Configuração das Chaves SSH (opcional):


3. **Se você configurou chaves SSH para acessar o GitHub, verifique se elas estão configuradas corretamente no seu ambiente.**

Uso
Para utilizar o script e consultar um CEP, execute o seguinte comando no terminal:

````bash
Copiar código
php index.php 01001000
````
Substitua 01001000 pelo CEP desejado.

Exemplo de Saída
Após executar o comando acima, você deverá ver a resposta da API do ViaCEP no terminal, mostrando os detalhes do CEP consultado.

Exemplo de saída:
````
json
Copiar código
{
  "cep": "01001-000",
  "logradouro": "Praça da Sé",
  "complemento": "lado ímpar",
  "bairro": "Sé",
  "localidade": "São Paulo",
  "uf": "SP",
  "ibge": "3550308",
  "gia": "1004",
  "ddd": "11",
  "siafi": "7107"
}
````
Contribuições
Contribuições são bem-vindas! Se você encontrar algum problema ou tiver melhorias para sugerir, sinta-se à vontade para abrir uma issue ou enviar um pull request.

Autor
Nome do Autor - Link para o perfil no GitHub

Licença
Este projeto está licenciado sob a Licença MIT - veja o arquivo LICENSE para mais detalhes.
