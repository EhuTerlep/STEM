import MySQLdb

db = MySQLdb.connect(host="localhost", user="user", passwd="password", db="school")
cur = db.cursor(MySQLdb.cursors.DictCursor)

db.autocommit(True)

cur.close
db.close
