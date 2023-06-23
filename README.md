# Setup Docker Para Projetos Laravel (8, 9 ou 10)
[Assine a Academy, e Seja VIP!](https://academy.especializati.com.br)

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/filgueirasjulio/slim_skeleton
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec app bash
```

Instalar as dependências do projeto
```sh
composer install
```

Acessar o projeto
[http://localhost:8989](http://localhost:8989)