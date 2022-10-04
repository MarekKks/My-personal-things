from typing_extensions import runtime


def main():
    name = input("What's your name? ")
    hello(name)
    hello()
    
    
def hello(to="world"):
    print("hello,", to)

main()


#Poznámky
#"" -> string; = - assignment from right to left
#Say hello to user + means joining stuff (not only numbers)
#functions (input(), print, strip(), capitalize(), title(), split())
#methods is a function that`s built in to a type of value like function or f-strings
#str = string, sep - separator - single blank space, \n - new line
#links - docs.python.org you find there parameters for functions (inputs)
#integers - int - number(-2, -1, 0, 1, 2)
# symbols (+, -, *, /, %) '%' - modulo operator - remainder after dividing
#interactive mode in terminal type python
#def -> define
#return -> returns value



#Examples
#name = name.title()
# print("hello,", name)
# print("hello," + name)
#print("hello ", sep="???")
#name = name.strip().title()  # Remove whitespace from str and capitalize user's name
#print("hello, \"friend\"") get quotes
#print(f"hello, {name}") format string
#print("hello ", end="") names parameters: sep, end (optional)
#Split user's name into first name and last name
#first, last = name.split(" ")

# ask user for their name, remove whitespace from str and capitalize user's name
#name = input("what s your name? ").strip().title()

#Split user's name into first name and last name
#first, last = name.split(" ")

# Say hello to user
#print(f"hello, {first}")
#def hello(to):
#    print("hello,", to)

#commands:  ls -> list all of the files
#           cp -> copy file
#           mv -> move a file, rename
#           rm -> remove file
#           mkdir -> make a directory(folder)
#           cd -> change directories from one to another
#           rmdir -> remove a directory
#           clear -> clear a terminal window