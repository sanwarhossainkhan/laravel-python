# python_scripts/hello.py
import sys

def greet(name, age):
    return f"Hello, {name}! You are {age} years old."

if len(sys.argv) > 2:
    name = sys.argv[1]
    age = sys.argv[2]
    result = greet(name, age)
    print(result)
else:
    print("Hello from Python!")



