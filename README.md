# PHPRouter 🤔🧩
Uma aplicação simples, feita do zero, usando Docker, MySql, Apache, e PHP puro!
Desenvolvi o projeto todo seguindo o padrão MVC, para uma organização mais clara. Está bem rudimentar, perto de alternativas existentes para roteamento usando PHP - como as fornecidas pelo Laravel.
Para rodar localmente o projeto, tenha os recursos Docker presentes na máquina, e faça o seguinte comando:

### Como iniciar 🚀
```
docker-compose up -d 
```
### Como parar o projeto (apenas parar os containers, e parar + limpar dados)
```
docker-compose down
docker-compose down -v
```

## Como está organizado?
Usando a magia do Docker, a aplicação rodará em uma versão leve do Apache, junto com versões semelhantes do MySql e Adminer (um administrador visual de banco de dados). Você pode conferir mais dados sobre o setup pelo arquivo .yml, que é o que faz tudo acontecer por baixo dos panos.
Minha prática com PHP é bem pouca, no entanto, já pude trabalhar bastante com Nodejs, e principalmente Express (como podem ver nos meus repos), então nada melhor para aprender do que criar do zero você mesmo.
Usando este [tutorial](https://www.freecodecamp.org/news/how-to-build-a-routing-system-in-php/), e outros diversos sobre Docker, Apache, e MySql, e organizando as estruturas conforme necessário, pude fazer algo simples, funcional, e legível pra qualquer iniciante.
Não pretendo fazer manutenções futuras, a menos que algo quebre, então... aproveitem!
