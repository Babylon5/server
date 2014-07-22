# README
This is the first version of a restful api for some fancy app to organize meetings. It lacks some basic functionality, but most parts work like a charm.

## TODO
 + remove Certificates (there are some examples within the repository, but PLEASE use your own)
 + Pagination
 + Exceptions/Errordecorator from flask
 + Unittests/Mockups
 + implement POST/PUSH methods (it's not possible to add new events etc.)

## Install & Run

just source `run.sh`

> . ./run.sh

Now you can open `https://127.0.0.1:8080` with your favourite browser.

## shut it down

stop the process (`Ctrl` + `C`) and then deactive the environment

> deactivate

## Commands

`python manager.py clean_db` deletes all tables

`python manager.py seed` seed db with dummy values

`python manager.py reset` clear and seed db with dummy values
 
#Links

Hash: http://stackoverflow.com/questions/800685/which-cryptographic-hash-function-should-i-choose
Flask: http://pycoder.net/bospy/presentation.html
