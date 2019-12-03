#!/usr/bin/python
from pymongo import MongoClient
import cgi
username='ym14tm' #Change this!
passwd='5717517' #Change this!
client=MongoClient('mongodb://'+username+':'+passwd+'@127.0.0.1/'+username)
db=client[username]
print "Content-Type: text/html"
print
print "<html>"
print "<head>"
print "<link rel='stylesheet' type='text/css' href='http://cosc.brocku.ca/~ym14tm/A3/css/top.css'>"
print "<link rel='stylesheet' type='text/css' href='http://cosc.brocku.ca/~ym14tm/A3/product/product.css'>"
print "<script type='text/javascript' language='javascript'>"
print "function addCart(code){"
print "localStorage.code = 1;"
print "}"
print "</script>"
print "</head>"
print "<h1 class='title'>"
print "Product Detail"
print "</h1>"
print "<header id='menu'>"
print "<ul>"
print "<li><a href='http://cosc.brocku.ca/~ym14tm/A3/faq.php'>FAQ</a></li>"
print "<li><a href='http://cosc.brocku.ca/~ym14tm/A3/index.php'>Products</a></li>"
print "</ul></header>"
print "<body>"
#Our script will go here:
#Our script will go here:
fs=cgi.FieldStorage()
course=fs['id'].value
rec=db.cookie.find_one({'code':course})
print "<div class='product' style='margin-left:30%;'>"
print "<div class='icon')>"
print "<img src='http://cosc.brocku.ca/~ym14tm/A3/icon/"+rec['code']+".png' width=150px height=150px >"
print "</div>"
print "<div class='info'>"
print "<h1>"+rec['name']+"</h1>"
print "<h2>"+"Flavour: "+rec['flavour']+"</h2>"
print "<p>"+"Story: "+rec['summary']+"</p>"
print "<div class = 'detail'>"
print "<h3><button onclick='addCart("+rec['code']+")'>add to cart</a></h3>"
print "</div>"
print "</div>"
print "</div>"