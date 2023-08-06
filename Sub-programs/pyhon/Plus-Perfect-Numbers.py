import math
import re


def conv(string):
    return re.findall('[0-9]', string)


y = int(input("Please Enter The Numbers To Check If There A Plus Perfect Numbers: "))
for i in range(y):
    result = 0
    str1 = conv(str(i))
    for j in range(len(str1)):
        result += pow(int(str1[j]), len(str1))
    if i == result:
        print("%4.2i Is Plus Perfect Number" % i)
