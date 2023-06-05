from BinaryTreeNode import BinaryTreeNode
#
def findDataRecursive(root, dataSearch, nro_times=0):


    if root == None:
        return nro_times
    
    tmp_nro_times = nro_times

    if root.data == dataSearch:
        tmp_nro_times +=1

    return  tmp_nro_times  +  \
        findDataRecursive(root.left, dataSearch, nro_times)  + \
        findDataRecursive(root.right, dataSearch, nro_times)

#
#
# Resolution
#           1
#       2       3
#     4   5   6   7


root = BinaryTreeNode(1)
root.left = BinaryTreeNode(2)
root.right = BinaryTreeNode(3)
root.left.left = BinaryTreeNode(4)
root.left.right = BinaryTreeNode(5)
root.right.left = BinaryTreeNode(6)
root.right.right = BinaryTreeNode(7)


dataSearch = 7
nro_times = findDataRecursive(root, dataSearch)
#print("Se encontro el valor de %d, %d veces" % (dataSearch, nro_times))

class TreeNode:


    #Constructor
    def __init__(self, data=None):
        self.data = data
        self.firstChild = None
        self.nextSibling = None


def findSum(root):
    if(root == None):
        return 0
    return root.data + \
        findSum(root.firstChild) + \
        findSum(root.nextSibling)
# Suma
#print(findSum())

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
            elif self.value == 'sqrt':
                return self.left.eval() ** (1/self.right.eval())
        else:
            return float(self.value)
#
#((2+4)*2+5)
#                +
#        *               5   
#    +       2
# 2    4
#
#

def evalManual():

    
    opeNodeA = Node(2)
    opeNodeB = Node(4)

    sumNode = Node('+')
    sumNode.left = opeNodeA
    sumNode.right = opeNodeB

    opeNodeC = Node(2)
    mulNode = Node('*')
    mulNode.left = sumNode
    mulNode.right = opeNodeC

    opeNodeD = Node(5)
    sum2Node = Node('+')
    sum2Node.left = mulNode
    sum2Node.right = opeNodeD
                    
    print(sum2Node.eval())

evalManual()

