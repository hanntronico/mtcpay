import RPi.GPIO as GPIO
import time
import os

#adjust for where your switch is connected
buttonPinA = 23
buttonPinB = 22
buttonPinC = 18
buttonPinD = 27
buttonPinE = 24
buttonPinF = 05
buttonPinG = 06
buttonPinH = 26
buttonPinI = 16


GPIO.setmode(GPIO.BCM)
GPIO.setup(buttonPinA, GPIO.IN)
GPIO.setup(buttonPinB, GPIO.IN)
GPIO.setup(buttonPinC, GPIO.IN)
GPIO.setup(buttonPinD, GPIO.IN)
GPIO.setup(buttonPinE, GPIO.IN)
GPIO.setup(buttonPinF, GPIO.IN)
GPIO.setup(buttonPinG, GPIO.IN)
GPIO.setup(buttonPinH, GPIO.IN)
GPIO.setup(buttonPinI, GPIO.IN)

while True:
  #assuming the script to call is long enough we can ignore bouncing
  if (GPIO.input(buttonPinA)):
    os.system("python /var/www/cometB/app/start.py")
  if (GPIO.input(buttonPinB)):
    os.system("python /var/www/cometB/app/start.py")
  if (GPIO.input(buttonPinC)):
    os.system("python /var/www/cometB/app/start.py")
  if (GPIO.input(buttonPinD)):
    os.system("python /var/www/cometB/app/start.py")
  if (GPIO.input(buttonPinE)):
    os.system("python /var/www/cometB/app/start.py")
  if (GPIO.input(buttonPinF)):
    os.system("python /var/www/cometB/app/start.py")
  if (GPIO.input(buttonPinG)):
    os.system("python /var/www/cometB/app/start.py")
  if (GPIO.input(buttonPinH)):
    os.system("python /var/www/cometB/app/start.py")
  if (GPIO.input(buttonPinI)):
    os.system("python /var/www/cometB/app/start.py")
    
