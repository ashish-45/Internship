import random
import string

s1 = string.ascii_uppercase
s2 = string.ascii_lowercase
s3 = string.digits
s4 = string.punctuation

# print(s1)
# print(s2)
# print(s3)
# print(s4)

passwordlength = int(input("Enter Password length : "))

s = []

s.extend(list(s1))
s.extend(list(s2))
s.extend(list(s3))
s.extend(list(s4))

random.shuffle(s)

print("".join(s[0:passwordlength]))


