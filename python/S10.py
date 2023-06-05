class Node:
    def __init__(self, value):
        self.value = value
        self.left = None
        self.right = None


    def eval(self):

        if self.right is not None and self.left is not None :
            if self.value == '+':
                return self.left.eval() + self.right.eval()
            elif self.value == '*':
                return self.left.eval() * self.right.eval()
            elif self.value == '-':
                return self.left.eval() - self.right.eval()
            elif self.value == '/':
                return self.left.eval() / self.right.eval()
            elif self.value == '^':
                return self.left.eval() ** self.right.eval()
        else:
            return float(self.value)

     
operatorPrecedence = {
    '(' : 0,
    ')' : 0,
    '+' : 1,
    '-' : 1,
    '*' : 2,
    '/' : 2,
    '^' : 3
}

def parserPostfixToBinaryTree(postfix):
    stack = []
    for char in postfix:
        if char not in operatorPrecedence:
            node = Node(char)
            stack.append(node)
        else:
            node = Node(char)
            node.right = stack.pop()
            node.left = stack.pop()
            stack.append(node)
    return stack.pop()


#
#          	^
#      +        /
#    3   13   1    2
#

def evalPostfixExpression():
    postfix =  "5"
    rootNode = parserPostfixToBinaryTree(postfix)
    print(rootNode.eval())


def postfixConvert(infix):
    stack = []
    postfix = [] 
         
    for char in infix:
        if char not in operatorPrecedence:
            postfix.append(char)
        else:
            if len(stack) == 0:
                stack.append(char)
            else:
                if char == "(":
                    stack.append(char)
                elif char == ")":
                    while stack[-1] != "(":
                        postfix.append(stack.pop())
                    stack.pop()
                elif operatorPrecedence[char] > operatorPrecedence[stack[-1]]:
                    stack.append(char)
                else:
                    while len(stack) != 0:
                        if stack[-1] == '(':
                            break
                        postfix.append(stack.pop())
                    stack.append(char)
     
    while len(stack) != 0:
        postfix.append(stack.pop())
 
    return "".join(postfix)

def convertIndorToPostfixExp():
    indor = "(5+3)*6"
    postfix = postfixConvert(indor) # “53+6*”
    print(postfix)

#
#          	^
#      +        /
#    3   13   1    2
#s

def evalIndorExpression():
    indor = "(3+(8+5))^(1/2)"
    postfix = postfixConvert(indor)
    rootNode = parserPostfixToBinaryTree(postfix)
    print(rootNode.eval())

def evalIndorExpressionFromKeyboard():
    indor = input("Input expression => ")
    postfix = postfixConvert(indor)
    rootNode = parserPostfixToBinaryTree(postfix)
    print(rootNode.eval())

evalIndorExpression()