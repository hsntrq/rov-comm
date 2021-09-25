from flask import Flask
from flask_socketio import SocketIO, send

app = Flask(__name__)
socketio = SocketIO(app, cors_allowed_origins="*")

@app.route('/')
def hello_world():
    return "<h1>Hello Ji!</h1>"

@socketio.on('message')
def handle_message(data):
    print('received message: ' + data)
    send(data)

if __name__ == '__main__':
    socketio.run(app)