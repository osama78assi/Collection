import math

p = int(input("Please Enter Numbers P To Check: "))
for i in range(1, p + 1):
    is_prime = True
    if i == 0 or i == 1:
        continue
    else:
        for j in range(2, int(i / 2)):
            if i % j == 0:
                is_prime = False
        if is_prime:
            number = pow(2, i) - 1
            for k in range(2, int(number / 2)):
                if number % k == 0:
                    is_prime = False
            if is_prime:
                print("{} Is Mersenne Number".format(number))
