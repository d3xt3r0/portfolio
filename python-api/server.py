from flask import Flask
import api


app = Flask(__name__)

@app.route('/api/requests/v1/github')
def repo_names():
    return api.get_repo_names()

@app.route('/api/requests/v1/profile')
def profile_pic():
    return api.get_profile_pic()

if __name__ == '__main__':
    app.run("0.0.0.0", port=80, debug=True)
