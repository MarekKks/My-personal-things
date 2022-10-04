def main():
    y = int(input("What's y? "))
    if is_even(y):
        print("Even")
    else:
        print("Odd")

def is_even(n):
    return n % 2 == 0 #most elegant way of writing this (Pythonic)


main()

x = int(input("What's x? "))

if x % 2 == 0:
    print("Even")
else:
    print("Odd")





# modulo operators
# +
# - 
# *
# /
# % -vypíše zvyšok
# match

#Examples
#    if n % 2 == 0:
#        return True
#    else:
#        return False

#return True if n % 2 == 0 else False


#Data type
# bool - True, Falls