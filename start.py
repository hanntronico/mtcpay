import time
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)
GPIO.setup(23,GPIO.IN)
GPIO.setup(22,GPIO.IN)
prev_input = 0
valini='00'
valor1='0'
valor2='0'
while True:
  inputA = GPIO.input(23)
  inputB = GPIO.input(22)
  if ((not prev_input) and inputA):
    #print("Button pressed")
     valor1='1'
     valini='00'+valor1+valor2
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'  if ((not prev_input) and inputB):
    #print("Button pressed")
    #archivo = open('estado.txt','w')
    #archivo.write(valor1)
    #archivo.close()
     valor2='1'
     valini='00'+valor1+valor2
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'
  if ((not prev_input) and inputA and inputB):
    #print("Button pressed")
    #archivo = open('estado.txt','w')
    #archivo.write(valor1)
    #archivo.close()
     valor2='1'
     valini='0011'
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'
  prev_input = inputA
  prev_input = inputB
  time.sleep(0.05)
