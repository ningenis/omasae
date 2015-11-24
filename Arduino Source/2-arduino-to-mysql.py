import serial
import MySQLdb

ser = serial.Serial('COM23', 115200);
# Open database connection
db = MySQLdb.connect("localhost","arduino","arduino","arduino" )

# prepare a cursor object using cursor() method
cursor = db.cursor()


while True:
	dataSuhu = ser.readline()
	dataSuhu = dataSuhu.split(':')
	bersih = dataSuhu[1][0:5]
	print bersih

	try:
	   # Execute the SQL command
	   cursor.execute('''INSERT INTO suhu(suhu)
	   					 VALUES (%s)''', (bersih))
	   # Commit your changes in the database
	   db.commit()
	except:
	   # Rollback in case there is any error
	   db.rollback()

# disconnect from server
db.close()