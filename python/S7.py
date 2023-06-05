class BinaryTreeNode:

    def __init__(self, data, left = None, right = None):
        self.data = data  # value node
        self.left = left  # left child
        self.right = right # right child

def preOrderRecursive(root, result):
    if not root:
        return
    result.append(root.data)                  # D : data
    preOrderRecursive(root.left, result)      # L : left
    preOrderRecursive(root.right, result)     # R : right

def inOrderRecursive(root, result):
    if not root:
        return
    result.append(root.left)                  # L : left
    preOrderRecursive(root.root, result)      # D : data
    preOrderRecursive(root.right, result)     # R : right

def postOrderRecursive(root, result):
    if not root:
        return
    result.append(root.left)                  # L : left
    preOrderRecursive(root.right, result)      # R : right
    preOrderRecursive(root.root, result)     # D : data# 

'''
Binary Tree


                                
                                |
                    ----------------------------------
                    |                               | 
                    2                               3  
                    |                               |    
                ---------                    ---------------
                |       |                    |             |
                4       5                   6              7

'''
N3_1 = BinaryTreeNode(10)
N3_2 = BinaryTreeNode(3)
N3_3 = BinaryTreeNode(12)
N3_4 = BinaryTreeNode(3)

N2_1 = BinaryTreeNode(N3_1.data-N3_2.data)
N2_2 = BinaryTreeNode(N3_3.data-N3_4.data)

N1_1 = BinaryTreeNode(N2_1.data*N2_2.data)



N1_1.left = N2_1
N1_1.right = N2_2

N2_1.left = N3_1
N2_1.right = N3_2

N2_2.left = N3_3
N2_2.right = N3_4

result = []
preOrderRecursive(N1_1, result)
print(result)
