import MySQLdb

db = MySQLdb.connect(host="localhost", user="user", passwd="password", db="school")
cur = db.cursor(MySQLdb.cursors.DictCursor)

db.autocommit(True)

sql = "UPDATE students SET age = 21 WHERE name = 'Test'"
cur.execute(sql)

cur.close
db.close
