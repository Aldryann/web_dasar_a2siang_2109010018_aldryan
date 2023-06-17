def selection_sort(items):
    """"""Sorts a list of items into ascending order using the selection sort algoright."""

    for step in range(len(items)):
    #find the location of the smallest element in
    #items[step:].
    location_of_smallest = step
    for location in range(step,len(items)):
        #TODO:determine location of smallest
        ...
    #TODO:exchange items [step] with items[location_of_smallest]
    ...