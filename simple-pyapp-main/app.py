from flask import Flask
import socket

app = Flask(__name__)

@app.route('/')
def landing():
    os_name = socket.gethostname()
    return f'<h2>Hello from {os_name}. Powered by Python Flask.</h2>'