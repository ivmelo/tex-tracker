tex-tracker
======

Package tracker for [Total Express](http://www.totalexpress.com.br).

Rastreia pacotes da [Total Express](http://www.totalexpress.com.br).

Tracks packages sent through Total Express. Made this in a couple of hours. I am using web scraping to grab the data.

Rastreia encomendas da total express. Feito em duas horas. Usa web scrapping para pegar as informações relevantes.

I built a telegram bot to track my packages and notify me of changes in the tracking status. I added a cron job to run a slightly different version of this script every couple of hours, and when there are any changes (it checks against a JSON file with tracking data from the previous check) it will send me a message. You can change this code to fit your needs.

Usei este código junto com um bot do telegram (ou qualquer outro serviço) para receber notificações quando o status do meu pacote mudar. Para isso, basta colocar cron job em seu servidor para ficar checando as informações em um determinado intervalo de tempo (recomendo algumas vezes por dia em algum minuto aleatório para não sobrecarregar o servidor deles).


```
The MIT License (MIT)

Copyright (c) 2016 Ivanilson Melo

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```
