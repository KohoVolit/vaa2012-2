path = "~/project/vaa2012-2/dev/bootstrap/matrix/"

library("jsonlite", lib.loc="/home/michal/R/x86_64-pc-linux-gnu-library/3.0")
library("httr", lib.loc="/home/michal/R/x86_64-pc-linux-gnu-library/3.0")
library("reshape2", lib.loc="/home/michal/R/x86_64-pc-linux-gnu-library/3.0")

datadb = fromJSON (paste(path,"matrix.json",sep=""))

datadb = transform(datadb,vote = as.numeric(vote))

data = acast(datadb,question~voter,value.var='vote')

X = t(scale(t(data),scale=FALSE))
SVD = svd(X)
#order of voters:
#SVD$v[,1]
    #better:
#SVD$v[,1] * SVD$d[1]

#out1 = t(rbind(dimnames(data)[[2]],SVD$v[,1] * SVD$d[1],SVD$v[,2] * SVD$d[2] ))
#write.table(out1,file=paste(path,"positions.tsv",sep=''),sep="\t")
out2 = t(rbind(dimnames(data)[[1]],SVD$u[,1],SVD$u[,2]))
write.table(out2,file=paste(path,"qcoefs.tsv",sep=''),sep="\t")
