import MySQLdb

db = MySQLdb.connect(host="localhost", user="user", passwd="password", db="school")
cur = db.cursor(MySQLdb.cursors.DictCursor)

db.autocommit(True)

#take user input
name = input("Enter your  name ")
age = input("Enter your age ")
gradeLevel = input("Enter your grade level ")

#insert user input into the database
sql = (f"INSERT INTO students (name,age,gradeLevel) VALUES ('{name}',{age},{gradeLevel})")
cur.execute(sql)
