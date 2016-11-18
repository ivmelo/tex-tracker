tex-tracker
======

Package tracker for [Total Express](http://www.totalexpress.com.br).

Rastreia pacotes da [Total Express](http://www.totalexpress.com.br).

Tracks packages sent through Total Express. Made this in a couple of hours. I am using web scraping to grab the data.

Rastreia encomendas da total express. Feito em duas horas. Usa web scrapping para pegar as informações relevantes.

I built a telegram bot to track my packages and notify me of changes in the tracking status. I added a cron job to run a slightly different script every couple of hours, and if there are any changes (it checks against a JSON file with tracking data from the previous check) it will send me a message. You can use this code to fit your needs.

Usei este código junto com um bot do telegram (ou qualquer outro serviço) para receber notificações quando o status do seu pacote mudar. Para isso, basta colocar cron job em seu servidor para ficar checando as informações em um determinado intervalo de tempo (recomendo algumas vezes por dia em algum minuto aleatório para não sobrecarregar o servidor deles).
