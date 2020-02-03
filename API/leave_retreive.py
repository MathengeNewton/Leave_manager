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

    n = mycursor.execute(
        "SELECT employee_id FROM leavedetails where name = 'system'")

    for x in mycursor:
        print(x)


my_function(conn_init)
