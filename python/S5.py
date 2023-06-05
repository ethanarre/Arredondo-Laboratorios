class QueueSimpleArray:


    def __init__(self, limit = 5):
        self.que = []
        self.limit = limit
        self.front = None  # Apunta al elemento que va hacer atendido a la cola
        self.rear = None   # Apunta al último elemento ingresado a la cola
        self.size = 0      # El numero de elementos que estan en la cola


    def isEmpty(self):
        return self.size <= 0


    def enQueue(self, item):
        if self.size >= self.limit :
            print('Queue Overflow..!')
            return  -1
        else:
            self.que.append(item)


        if self.front is None: # Esta la cola inicializada
            self.front = self.rear = 0
        else:
            self.rear = self.size


        self.size += 1
        print('Queue after enQueue',self.que)


    def deQueue(self):
        if self.size <= 0:
            print('Queue Underflow....!')
            return 0
        else:
            self.que.pop(0) # Obtiene al que esta en espera
            self.size -= 1
            if self.size == 0: # La cola esta vacia?
                self.front = self.rear = None
            else:
                self.rear = self.size -1
            print('Queue after deQueue', self.que)


    def queueRear(self): # Devuelve el último dato que se ha ingresado a la cola
        if self.rear is None:
            print('Sorry, the queue is empty..!')
            raise IndexError # Lanza una excepcion controlada , OPCIONAL : return -1
        return self.que[self.rear]


    def queueFront(self):  # Devuelve el dato que va hacer atendido por la cola
        if self.front is None:
            print('Sorry, the queue is empty')
            raise IndexError # Lanza una excepcion controlada , OPCIONAL : return -1
        return self.que[self.front]


    def getSize(self):
        return self.size


    def getQue(self):
        return self.que


# Execution
que = QueueSimpleArray(10)

print("--------------------------------")
que.enQueue("A")
que.enQueue("E")
que.enQueue("I")
que.enQueue("O")
que.enQueue("U")
print("Que   --> " , que.getQue())
print("Front --> " , que.queueFront())
print("Rear  --> " , que.queueRear())

print("--------------------------------")
que.deQueue()
que.deQueue()
print("Que   --> " , que.getQue())
print("Front --> " , que.queueFront())
print("Rear  --> " , que.queueRear())

print("--------------------------------")
que.enQueue("1")
que.enQueue("2")
que.enQueue("3")
print("Que   --> " , que.getQue())
print("Front --> " , que.queueFront())
print("Rear  --> " , que.queueRear())

print("--------------------------------")
que.deQueue()
print("Que   --> " , que.getQue())
print("Front --> " , que.queueFront())
print("Rear  --> " , que.queueRear())






