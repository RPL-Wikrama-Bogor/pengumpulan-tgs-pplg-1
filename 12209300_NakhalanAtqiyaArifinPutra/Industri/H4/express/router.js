const Home = (req, res) => {
    res.send('<h1>Selamat datang</h1>'); //terkirimnya sebagai HTML

}
const About = (req, res) => {
    res.send('<h1>Selamat datang diabout</h1>'); //terkirimnya sebagai HTML

}
const Contact = (req, res) => {
    res.send('<h1>Selamat datang dicontact</h1>'); //terkirimnya sebagai HTML

}
const News = (req, res) => {
    res.send('<h1>Selamat datang di news</h1>'); //terkirimnya sebagai HTML

}
const beranda = (req, res) => {
    res.send('<h1>Selamat datang di beranda</h1>'); //terkirimnya sebagai HTML

}
//mengexports atau mengekstra untuk bisa dipanggil difile lain
module.exports ={
    Home,
    About,
    Contact,
    News,
    beranda
}