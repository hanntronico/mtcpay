import time
import RPi.GPIO as GPIO
import urllib2
GPIO.setmode(GPIO.BCM)
GPIO.setup(23,GPIO.IN)
GPIO.setup(22,GPIO.IN)
GPIO.setup(18,GPIO.IN)
GPIO.setup(27,GPIO.IN)
GPIO.setup(24,GPIO.IN)
GPIO.setup(05,GPIO.IN)
GPIO.setup(06,GPIO.IN)
GPIO.setup(26,GPIO.IN)
GPIO.setup(16,GPIO.IN)


#GPIO.setup(25,GPIO.OUT)
prev_input = 0
valini='0000000'
valor1='0'
valor2='0'
while True:
  inputA = GPIO.input(23)
  inputB = GPIO.input(22)
  inputC = GPIO.input(18)
  inputD = GPIO.input(27)
  inputE = GPIO.input(24)
  inputF = GPIO.input(05)
  inputG = GPIO.input(06)
  inputH = GPIO.input(26)
  inputI = GPIO.input(16)
  if ((not prev_input) and inputA):
    #print("Button pressed")
     valor1='1'
     valini='0000000'+valor1+valor2 
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'
     GPIO.setup(25,GPIO.OUT)
     GPIO.output(25,GPIO.HIGH)
     f=urllib2.urlopen("http://192.168.1.200/enviosms/index.php?id=1")
  if ((not prev_input) and inputB):
     valor2='1'
     valini='0000000'+valor1+valor2
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'
  if ((not prev_input) and inputC):
     # valor2='0'
     valini='0000001'+valor1+valor2
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'
  if ((not prev_input) and inputD):
     # valor2='0'
     valini='0000010'+valor1+valor2
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'
  if ((not prev_input) and inputE):
     # valor2='1'
     valini='0000100'+valor1+valor2
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'
  if ((not prev_input) and inputF):
     # valor2='1'
     valini='0001000'+valor1+valor2
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'
  if ((not prev_input) and inputG):
     # valor2='1'
     valini='0010000'+valor1+valor2
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'
  if ((not prev_input) and inputH):
     # valor2='1'
     valini='0100000'+valor1+valor2
     print(valini)
     archivo = open('estado.txt','w')
     archivo.write(valini)
     archivo.close()
     valor1=valor2='0'
  if ((not prev_input) and inputI):
     GPIO.setup(13,GPIO.OUT)
     GPIO.output(13,GPIO.HIGH)
     # valini='000000'+valor1+valor2
     # print(valini)
     # archivo = open('estado.txt','w')
     # archivo.write(valini)
     # archivo.close()
     # valor1=valor2='0'
  #if ((not prev_input) and inputA and inputB):
    # print("Button pressed")
    # archivo = open('estado.txt','w')
    # archivo.write(valor1)
    # archivo.close()
    # valor2='1'
    # valini='00000011'
    # print(valini)
    # archivo = open('estado.txt','w')
    # archivo.write(valini)
    # archivo.close()
    # valor1=valor2='0'
  prev_input = inputA
  prev_input = inputB
  time.sleep(0.05)
