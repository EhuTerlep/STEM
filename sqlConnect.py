import MySQLdb

db = MySQLdb.connect(host="localhost", user="user", passwd="password", db="school")
cur = db.cursor(MySQLdb.cursors.DictCursor)

db.autocommit(True)

sql = "SELECT * from students"
cur.execute(sql)

#display data in db
rows = cur.fetchall()
for row in rows:
    print("Hi " + row['name'] + ", you are " + str(row['age']) + " years old and in grade " + str(row['gradeLevel']))

cur.close
db.close
