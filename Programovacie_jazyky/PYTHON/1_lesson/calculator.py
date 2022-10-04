from multiprocessing import reduction


def main():
    x = int(input("What's x? "))
    print("x squared is", square(x))

def square(n):
    #return n * n    
    #return pow(n, 2)
    return n ** 2

main()



#x = int(input("What's x? "))
#y = int(input("What's y? "))

#print(int(input("What's x? ")) + int(input("What's y? "))) not readable enough

#z = int(x) + int(y)
#print(Z)

#x = float(input("What's x? "))
#y = float(input("What's y? "))

#z = (x / y)

#print(f"{z:.2f}")


#functions : int, round (number rounds it to the nearest int, zaokruhlenie)
#data type: float (1.1, 6.8, -4.5), int (-2, -1 0, 1, 2)
# [] -> optional