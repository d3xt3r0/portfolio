from flask import Flask
import api


app = Flask(__name__)

@app.route('/api/requests/v1/github')
def hello():
    return api.get_repo_names()

if __name__ == '__main__':
    app.run("0.0.0.0", port=80, debug=True)
