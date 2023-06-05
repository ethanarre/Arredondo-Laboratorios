class BinaryTreeNode:

    def __init__(self, data, left = None, right = None):
        self.data = data
        self.left = left
        self.right = right 

def findMaxRecursive(tree): 
    if tree is None:  
        return float('-inf')  # Mininum value
    data = tree.data 
    left_max = findMaxRecursive(tree.left)  
    right_max = findMaxRecursive(tree.right)  
        
    return max([data, left_max, right_max])

def findMinRecursive(tree): 
    if tree is None:  
        return float('-inf')  # Mininum value
    data = tree.data 
    left_max = findMaxRecursive(tree.left)  
    right_max = findMaxRecursive(tree.right)  
        
    return min([data, left_max, right_max])

def sumRecursive(root):
    if (root == None):
        return 0
    return root.data + \
           sumRecursive(root.left) + \
           sumRecursive(root.right)

def sumRecursive2(root,suma=0):
    if (root.left.left == None):
        suma = root.left.data + suma
        suma = root.right.data + suma   
        return suma
    return sumRecursive2(root.left)

'''
Binary Tree
                      1
                      |
            ----------------------
            |                     | 
            2                     3  
        ---------             ---------   
        |       |             |       |
        7       5             6       7
'''
childrenLeft_left = BinaryTreeNode(7)
childrenLeft_right = BinaryTreeNode(5)
childrenLeft = BinaryTreeNode(2,childrenLeft_left,childrenLeft_right)
childrenRight_left = BinaryTreeNode(6)
childrenRight_right = BinaryTreeNode(7)
childrenRight = BinaryTreeNode(3,childrenRight_left,childrenRight_right)
root = BinaryTreeNode(1,childrenLeft,childrenRight)

sumRecursive2(root)
