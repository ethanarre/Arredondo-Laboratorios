
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

node0 = Node()
node0.data = 0

node0.next = node1

node4 = Node()
node4.data = 40

node2.next=node4

node3 = Node()
node3.data = 30

node2.next=node3
node3.next=node4

print("node0.next -->",node0.next)
print("node1.next -->",node1.next)
print("node2.next -->",node2.next)
print("node3.next -->",node3.next)
print("node4.next -->",node4.next)
