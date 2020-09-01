from flask import Flask,render_template
app = Flask(__name__)
@app.route('/')
@app.route('/dashboard')
def dashboard():
    return render_template('Dashboard.php')

@app.route('/login')
def login():
    return render_template('login.html')

@app.route('/dynamicmarker.php')
def dynamic():
    return render_template('dynamicmarker.php')



if __name__ =='__main__':
    app.run(debug=True)