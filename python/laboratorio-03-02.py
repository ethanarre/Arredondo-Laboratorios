class Node:
   def __init__(self):
       self.data = None
       self.next = None

   def hasNext(self):
       return self.next != None

class LinkedList :
   def __init__(self):
       self.head = None
       self.length = 0
   def print( self ):
       node = self.head
       while node != None:
           print(node.data, end =" => ")
           node = node.next
       print("NULL")

   def insertAtBegin(self,data):
       newNode = Node()
       newNode.data = data
       if self.length == 0:
           self.head = newNode
       else:
           newNode.next = self.head
           self.head = newNode
       self.length += 1

lls = LinkedList()
lls.print()
 
lls.insertAtBegin(10) 
lls.insertAtBegin(20) 
lls.insertAtBegin(30) 
lls.insertAtBegin(40)


