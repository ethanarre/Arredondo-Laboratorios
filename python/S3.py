class Node:
   
   def __init__(self):
       self.data = None
       self.next = None

   def hasNext(self):
       return self.next != None
   
node1 = Node()
node1.data = 10 


node2 = Node()
node2.data = 20


node1.next = node2


print("node1.next -->",node1.next)
print("node2.next -->",node2.next)



