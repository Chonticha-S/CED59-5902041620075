from tkinter import *

root =Tk()

l1=Label(root,text='name:')
l2=Label(root,text='surname:')
l3=Label(root,text='username: ')
l4=Label(root,text='email: ')
l5=Label(root,text='password')

t1=Entry(root,textvariable=StringVar())
t2=Entry(root,textvariable=StringVar())
t3=Entry(root,textvariable=StringVar())
t4=Entry(root,textvariable=StringVar())
t5=Entry(root,show='*' ,textvariable=StringVar())

b1=Button(root,text='Login')

l1.pack()
t1.pack()
l2.pack()
t2.pack()
l3.pack()
t3.pack()
l4.pack()
t4.pack()
l5.pack()
t5.pack()
b1.pack()

root.mainloop()
