import csv




class BSTNode:
       def __init__(self, data):
             self.left = None
             self.right = None
             self.data = data

def findMin(root):
    '''
    Find the minimum value. Recursive mode
    :param root:
    :return:
    '''
    currentNode = root
    if currentNode.left == None:
        return currentNode
    else:
        return findMin(currentNode.left)

def findMinIterative(root):
    '''
    Find the minimum value. Iterative mode
    :param root:
    :return:
    '''
    currentNode = root
    while currentNode.left != None:
        currentNode = currentNode.left
    return currentNode

def insertNode(root, node):


    '''
    Insert a node in BST
    '''
    if root == None:
        root = node
    else:
        if root.data > node.data:
            if root.left == None:
                root.left = node
            else:
                insertNode(root.left, node)
        else:
            if root.right == None:
                root.right = node
            else:
                insertNode(root.right, node)

def findMax(root):
    '''
    Find the maximum value. Recursive mode
    :param root:
    :return:
    '''
    currentNode = root
    if currentNode.right == None:
        return currentNode
    else:
        return findMax(currentNode.right)

def findMaxIterative(root):
    '''
    Find the maximum value. Iterative mode
    :param root:
    :return:
    '''
    currentNode = root
    while currentNode.right != None:
        currentNode = currentNode.right
    return currentNode

nombres = []
f= open("data_nombres.csv")
reader= csv.reader(f)
for row in reader:
    nombres.append(row)
root = BSTNode(nombres[0])
insertNode(root, BSTNode(nombres[1]))
insertNode(root, BSTNode(nombres[2]))
insertNode(root, BSTNode(nombres[3]))
insertNode(root, BSTNode(nombres[4]))
insertNode(root, BSTNode(nombres[5]))
insertNode(root, BSTNode(nombres[6]))
insertNode(root, BSTNode(nombres[7]))
insertNode(root, BSTNode(nombres[8]))
insertNode(root, BSTNode(nombres[9]))

print(findMin(root).data)
print(findMaxIterative(root).data)