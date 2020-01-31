import mysql.connector
import json


conn_init = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="mathenge,./1998",
    database="leave_management"
)


def my_function(*args, **kwags):
    mycursor = conn_init.cursor()

    n = mycursor.execute("SELECT * FROM leave_details")

    for x in mycursor:
        print(x)

    print(json.dumps((n)))


my_function(conn_init)
