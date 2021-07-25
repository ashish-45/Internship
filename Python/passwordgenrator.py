import random

digit = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

smallLetter = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l",
               "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]

capitalLetter = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K",
                 "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"]

SpecialCharacter = ["!", "#", "$", "%", "&", "@"]

password = random.randint(0,10)

rand_digit = random.choice(digit)
rand_smallLetter = random.choice(smallLetter)
rand_capitalLetter = random.choice(capitalLetter)
rand_specialCharacter = random.choice(SpecialCharacter)

password = str(rand_digit) + str(rand_smallLetter) + str(rand_capitalLetter) + str(rand_specialCharacter)

print(password)