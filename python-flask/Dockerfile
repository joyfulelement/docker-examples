FROM python:3

WORKDIR /usr/src/app

COPY requirements.txt ./

RUN pip install -r requirements.txt

COPY . .

#only for documentation
EXPOSE 80 

CMD [ "python", "./app.py" ]
