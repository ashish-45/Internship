import random

num = random.randint(1, 5)

guess = int(input("Guess the number : "))

if(guess == num):
    print("****************** Congragulation! You won the game ****************")
else:
    print("Oops! You lose the game," "Try Again")
