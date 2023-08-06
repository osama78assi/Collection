
y = int(input("Please Enter The Numbers To Check If There A Perfect: "))
for i in range(y):
 solution = 0
 for j in range(2, (i+1)):
  if float(i % j) == 0:
   solution += (i / j)
 if i == solution:
  print("%4.0i Is Perfect !" % i )