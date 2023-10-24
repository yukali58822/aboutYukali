from flask import Flask,render_template,request #透過request抓前端的值
from datetime import datetime


app = Flask(__name__)

# 靜態網頁
@app.route('/')
def index():
    homepage = "<h1>謝佩宸的Python網頁</h1>"
    homepage+= "<a href=/mis>MIS單純傳入文字</a><br>"
    homepage+= "<a href=/today>顯示日期與時間</a><br>"
    homepage+= "<a href=/welcome?keyword=PEI>傳入使用者名稱</a><br>"
    homepage+= "<a href=/about>關於我的網頁</a><br>"
    homepage+= "<a href=/account>關於我的帳密</a><br>"
    return homepage

@app.route('/mis')
def course():
    return "<h1>資訊管理導論</h1> "

#動態網頁
@app.route('/today')
def today():
    now = datetime.now()
    return render_template('today.html',datetime=str(now))

@app.route('/about')
def about():
    return render_template('javascrip.html')

@app.route('/welcome',methods=["GET","POST"])
def welcome():
    user = request.values.get('keyword')
    return render_template('welcome.html',text=user)

@app.route("/account",methods=["GET","POST"])
def account():
    if request.method == "POST":
        user = request.form["user"]
        pwd = request.form['pwd']
        result = "您輸入的帳號是：" + user + "; 密碼為：" + pwd
        return result
    else:
        return render_template("account.html")

if __name__ == '__main__':
    app.run(debug=True)
