#Makefile
all: test install run

clean:
	rm *~*
	rm '*.pyc'
test:
	nosetests runserver.py
install:
	sudo apt-get install lybmysqlclient
	sudo apt-get install python-dev
	pip install --upgrade pip
	pip install MySQL-python
	pip install Flask
	pip install nose
run:
	python runserver.py
