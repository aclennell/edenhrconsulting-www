<script src="http://widgets.twimg.com/j/2/widget.js"></script>
                <script>
                    new TWTR.Widget({
                        version: 2,
                        type: 'profile',
                        rpp: 4,
                        interval: 6000,
                        width: 250,
                        height: 300,
                        theme: {
                            shell: {
                                background: '#f6f6f6',
                                color: '#434344'
                            },
                            tweets: {
                                background: '#f6f6f6',
                                color: '#434344',
                                links: '#2259f0'
                            }
                        },
                        features: {
                            scrollbar: true,
                            loop: false,
                            live: true,
                            hashtags: true,
                            timestamp: false,
                            avatars: false,
                            behavior: 'all'
                        }
                    }).render().setUser('adamclennell').start();
                </script>